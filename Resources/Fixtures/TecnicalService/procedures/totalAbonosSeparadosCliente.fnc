-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$

DROP FUNCTION IF EXISTS `func_total_abonosSeparados_cliente` $$

CREATE FUNCTION `func_total_abonosSeparados_cliente`(cliCodigo int) RETURNS double
    COMMENT '{"v":1}'   
    DETERMINISTIC
BEGIN
	declare totalAbonosSeparados double;	

	SET totalAbonosSeparados = (SELECT SUM(sepa_abono) FROM abono_separado WHERE cli_codigo = cliCodigo);

        RETURN totalAbonosSeparados;
END$$
DELIMITER ;

