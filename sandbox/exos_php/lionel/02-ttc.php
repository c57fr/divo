<?php

/**
 * (c) Online-FormaPRO - Cession 168 - 2022 - Lionel CÔTE.
 */

/**
 * Price + % Tax.
 *
 * @param mixed $price
 * @param mixed $tax
 */
function priceWithTax($price, $tax)
{
	return $price * (1 + $tax / 100);
}

echo priceWithTax(17.99, 20);
