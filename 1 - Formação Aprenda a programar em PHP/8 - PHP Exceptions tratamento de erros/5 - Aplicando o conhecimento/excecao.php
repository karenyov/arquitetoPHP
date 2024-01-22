<?php
/**
 * @throws Division
 */
function funcaoQueLancaExcecao() {

}

/**
 * @throws Exception
 */
function outraFuncao() {
  funcaoQueLancaExcecao();
}

funcaoQueLancaExcecao();