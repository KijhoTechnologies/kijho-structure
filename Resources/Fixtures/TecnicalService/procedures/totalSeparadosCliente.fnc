-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$

DROP FUNCTION IF EXISTS `func_total_Separados_cliente` $$

CREATE  FUNCTION `func_total_Separados_cliente`(cliCodigo int,sepAnulada varchar(2)) RETURNS double
   COMMENT '{"v":1}' 
   DETERMINISTIC
begin
	declare totalSeparados double;	
		
        SET totalSeparados = (SELECT SUM(sep_total) FROM separados WHERE cli_codigo = cliCodigo);

	RETURN totalSeparados;
END$$
DELIMITER ;

