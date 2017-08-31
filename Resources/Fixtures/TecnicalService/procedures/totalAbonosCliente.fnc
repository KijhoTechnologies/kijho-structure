-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$
DROP FUNCTION IF EXISTS `func_total_abonos_cliente` $$
CREATE FUNCTION `func_total_abonos_cliente`(cliCodigo int) RETURNS double
    COMMENT '{"v":1}'   
    DETERMINISTIC
BEGIN
	declare totalAbonos double;	

        SET totalAbonos = (SELECT SUM(fpc.fpc_abono) FROM facturas_por_cobrar fpc join factura_ventas fv on fpc.facv_codigo = fv.facv_codigo WHERE fv.cli_codigo = cliCodigo);

        RETURN totalAbonos;
END$$
DELIMITER ;

