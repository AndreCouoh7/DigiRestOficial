<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface ICalculateTotal
{
	public function CalcularTotal(Request $ordenx);
}
