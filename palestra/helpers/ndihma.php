<?php 
/// funksioni qe do te shfaqe nje liste me gabime, duke perdorur klasat e bootstrapit..
function afisho_gabimet( $gabimet )
{
	$output = '<ul class="bg-danger">';

	foreach ( $gabimet as $gabim )
	{
		$output .= '<li class="text-danger">'.$gabim.'</li>';
	}

	$output .= '</ul>';

	return $output;
} ///FUND afisho_gabimet


/// Funksioni qe pastron inputin nga te dhena te demshme per bazen e te dhenave...
function siguro( $rekord )
{
	$tmp = trim( $rekord );
	$tmp =  htmlentities( $rekord, ENT_QUOTES, "UTF-8");

	return $tmp;
}///FUND siguro