-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$
DROP FUNCTION IF EXISTS `func_total_abonos_cliente` $$
CREATE FUNCTION `func_total_abonos_cliente`(cliCodigo int) RETURNS double
    COMMENT '{"v":1}'   
    DETERMINISTIC
BEGIN
	declare totalAbonos double;	

	declare total cursor for
		SELECT SUM(faca_abono) FROM abono_facturacredito_ventas 
         WHERE cli_codigo = cliCodigo;

     OPEN total;
		FETCH total INTO totalAbonos;
	CLOSE total;

    RETURN totalAbonos;
END$$
DELIMITER ;

