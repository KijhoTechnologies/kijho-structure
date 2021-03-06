-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$

DROP FUNCTION IF EXISTS `func_total_abonosSeparados_cliente` $$

CREATE FUNCTION `func_total_abonosSeparados_cliente`(cliCodigo int) RETURNS double
    COMMENT '{"v":1}'   
    DETERMINISTIC
BEGIN
	declare totalAbonosSeparados double;	

	declare total cursor for
		SELECT SUM(sepa_abono) FROM abono_separado
         WHERE cli_codigo = cliCodigo;

     OPEN total;
		FETCH total INTO totalAbonosSeparados;
	CLOSE total;

    RETURN totalAbonosSeparados;
END$$
DELIMITER ;

