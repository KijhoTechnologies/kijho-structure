-- {"v":1}
-- ------------------------------------------------------------------------------------
DELIMITER $$

DROP FUNCTION IF EXISTS `func_total_Separados_cliente` $$

CREATE  FUNCTION `func_total_Separados_cliente`(cliCodigo int,sepAnulada varchar(2)) RETURNS double
   COMMENT '{"v":1}' 
   DETERMINISTIC
begin
	declare totalSeparados double;	
		
	declare total cursor for
		SELECT SUM(sep_total) FROM separado WHERE  sep_anulada = sepAnulada AND cli_codigo = cliCodigo;

	OPEN total;
		FETCH total INTO totalSeparados;
	CLOSE total;

	RETURN totalSeparados;
END$$
DELIMITER ;

