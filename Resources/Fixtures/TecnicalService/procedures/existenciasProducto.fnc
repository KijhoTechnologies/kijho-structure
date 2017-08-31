-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$

DROP FUNCTION IF EXISTS `func_existencias_producto` $$

CREATE FUNCTION func_existencias_producto(codigo INT, fecha DATE) RETURNS float
  COMMENT '{"v":1}'    
  DETERMINISTIC 
BEGIN
	DECLARE var_existencias FLOAT;
	DECLARE var_entradasTotal FLOAT;
	DECLARE var_entradasTrasTotal FLOAT;
	DECLARE var_entradasDevTotal FLOAT;
	DECLARE var_entradasAjInvTotal FLOAT;
	DECLARE var_entradasPrestTotal FLOAT;
	DECLARE var_salidasTotal FLOAT;
	DECLARE var_salidasTrasTotal FLOAT;
	DECLARE var_salidasDevTotal FLOAT;
	DECLARE var_salidasRegTotal FLOAT;
	DECLARE var_salidasPrestTotal FLOAT;
	DECLARE var_salidasCuadTotal FLOAT;
        DECLARE var_salidasSepTotal FLOAT;
    

	IF fecha IS NULL THEN
		SET var_entradasTotal = (SELECT IF(ent_cantidad IS NOT NULL,SUM(ent_cantidad),0) FROM entrada WHERE prod_codigo = codigo);
	ELSE
		SET var_entradasTotal = (SELECT IF(ent_cantidad IS NOT NULL,SUM(ent_cantidad),0) FROM entrada WHERE prod_codigo = codigo AND ent_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_entradasTrasTotal = (SELECT IF(tran_procodentcant IS NOT NULL, SUM(tran_procodentcant), 0) FROM detalle_transpaso_entrada WHERE tran_procodent = codigo);
	ELSE
		SET var_entradasTrasTotal = (SELECT IF(trent.tran_procodentcant IS NOT NULL, SUM(trent.tran_procodentcant), 0) FROM detalle_transpaso_entrada trent JOIN transpaso t WHERE trent.tran_procodent = codigo AND trent.id_fk = t.tran_codigo AND t.tran_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_entradasDevTotal = (SELECT IF(ddecl_cantidad IS NOT NULL, SUM(ddecl_cantidad), 0) FROM detalle_devolucion_cliente devc WHERE prod_codigo = codigo);
	ELSE
		SET var_entradasDevTotal = (SELECT IF(ddecl_cantidad IS NOT NULL, SUM(ddecl_cantidad), 0) FROM detalle_devolucion_cliente devc WHERE prod_codigo = codigo AND ddecl_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_entradasAjInvTotal = (SELECT IF(reen_cantidad IS NOT NULL, SUM(reen_cantidad), 0) FROM regalo_entrada reen WHERE prod_codigo = codigo);
	ELSE
		SET var_entradasAjInvTotal = (SELECT IF(reen_cantidad IS NOT NULL, SUM(reen_cantidad), 0) FROM regalo_entrada reen WHERE prod_codigo = codigo AND reen_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_entradasPrestTotal = (SELECT IF(pres_cantidad IS NOT NULL, SUM(pres_cantidad), 0) FROM prestamo WHERE prod_codigo = codigo AND pres_tipo AND pres_estado = 1);
	ELSE
		SET var_entradasPrestTotal = (SELECT IF(pres_cantidad IS NOT NULL, SUM(pres_cantidad), 0) FROM prestamo WHERE prod_codigo = codigo AND pres_tipo AND pres_estado = 1 AND pres_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_salidasTotal = (SELECT IF(sal_cantidad IS NOT NULL, SUM(sal_cantidad*-1),0) FROM salida WHERE prod_codigo = codigo);
	ELSE
		SET var_salidasTotal = (SELECT IF(sal_cantidad IS NOT NULL, SUM(sal_cantidad*-1),0) FROM salida WHERE prod_codigo = codigo AND sal_fecha <= fecha);
	END IF;
    
   	IF fecha IS NULL THEN
		SET var_salidasSepTotal = (SELECT IF(sep.sal_cantidad IS NOT NULL, SUM(sep.sal_cantidad*-1), 0) FROM salida_separado sep, separados sp WHERE sep.prod_codigo = codigo AND sep.sep_codigo = sp.sep_codigo AND sp.sep_facturado = 'No');
	ELSE
		SET var_salidasSepTotal = (SELECT IF(sep.sal_cantidad IS NOT NULL, SUM(sep.sal_cantidad*-1), 0) FROM salida_separado sep, separados sp WHERE sep.prod_codigo = codigo AND sep.sal_sep_fecha <= fecha AND sep.sep_codigo = sp.sep_codigo AND sp.sep_facturado = 'No');
	END IF;

	IF fecha IS NULL THEN
		SET var_salidasTrasTotal = (SELECT IF(tran_procodsalcant IS NOT NULL, SUM(tran_procodsalcant*-1), 0) FROM detalle_transpaso WHERE tran_procodsal = codigo);
	ELSE
		SET var_salidasTrasTotal = (SELECT IF(trsal.tran_procodsalcant IS NOT NULL, SUM(trsal.tran_procodsalcant*-1), 0) FROM detalle_transpaso trsal JOIN transpaso t WHERE trsal.tran_procodsal = codigo AND trsal.id_fk = t.tran_codigo AND t.tran_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_salidasDevTotal = (SELECT IF(sade_cantidad IS NOT NULL, SUM(sade_cantidad*-1),0) FROM salida_devolucion WHERE prod_codigo = codigo);
	ELSE
		SET var_salidasDevTotal = (SELECT IF(sade_cantidad IS NOT NULL, SUM(sade_cantidad*-1),0) FROM salida_devolucion WHERE prod_codigo = codigo AND sade_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_salidasRegTotal = (SELECT IF(resa_cantidad IS NOT NULL, SUM(resa_cantidad*-1),0) FROM regalo_salida WHERE prod_codigo = codigo);
	ELSE
		SET var_salidasRegTotal = (SELECT IF(resa_cantidad IS NOT NULL, SUM(resa_cantidad*-1),0) FROM regalo_salida WHERE prod_codigo = codigo AND resa_fecha <= fecha);
	END IF;

	IF fecha IS NULL THEN
		SET var_salidasPrestTotal = (SELECT IF(pres_cantidad IS NOT NULL, SUM(pres_cantidad*-1), 0) FROM prestamo WHERE prod_codigo = codigo AND pres_tipo = 2 AND pres_estado = 1);
	ELSE
		SET var_salidasPrestTotal = (SELECT IF(pres_cantidad IS NOT NULL, SUM(pres_cantidad*-1), 0) FROM prestamo WHERE prod_codigo = codigo AND pres_fecha <= fecha AND pres_tipo = 2 AND pres_estado = 1);
	END IF;

	IF fecha IS NULL THEN
		SET var_salidasCuadTotal = (SELECT IF((dc.cuadet_cant_entrega - dc.cuadet_cant_devuelve) IS NOT NULL, SUM((dc.cuadet_cant_entrega - dc.cuadet_cant_devuelve)*-1), 0) FROM cuadre_detalle dc, cuadre cua WHERE dc.prod_codigo = codigo AND dc.cua_codigo = cua.cua_codigo AND cua.facv_codigo = 0);
	ELSE
		SET var_salidasCuadTotal = (SELECT IF((dc.cuadet_cant_entrega - dc.cuadet_cant_devuelve) IS NOT NULL, SUM((dc.cuadet_cant_entrega - dc.cuadet_cant_devuelve)*-1), 0) FROM cuadre_detalle dc, cuadre cua WHERE dc.prod_codigo = codigo AND dc.cua_codigo = cua.cua_codigo AND cua.facv_codigo = 0 AND cua.cua_fecha <= fecha);
	END IF;

	SET var_existencias = var_entradasTotal + var_salidasTotal + var_salidasTrasTotal + var_entradasTrasTotal + var_entradasDevTotal + var_salidasDevTotal + var_salidasRegTotal + var_entradasAjInvTotal + var_salidasPrestTotal + var_entradasPrestTotal + var_salidasCuadTotal + var_salidasSepTotal;

	RETURN var_existencias;
END$$
DELIMITER ;

