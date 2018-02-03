-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$

DROP FUNCTION IF EXISTS `func_total_facturas_cliente` $$

CREATE FUNCTION `func_total_facturas_cliente`(cliCodigo int, facTipo int, facAnulada varchar(2)) RETURNS double
  COMMENT '{"v":1}'     
  DETERMINISTIC
BEGIN
	declare totalDeudas double;	
		
	SET totalDeudas = (SELECT SUM(facv_total) FROM factura_ventas WHERE facv_estado = facTipo AND cli_codigo = cliCodigo);

	RETURN totalDeudas;
END$$
DELIMITER ;

