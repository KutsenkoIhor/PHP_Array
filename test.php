<?php

function makeCensored(string $str, array $arr): string
{
    $block = "$#%!";
    $workArr = explode(' ',$str);
    foreach ($arr as $slovoZapret) {
        $mass = [];
        foreach ($workArr as $word) {
            if ($word === $slovoZapret) {
                $mass[] = $block;
            } else {
                $mass[] = $word;
            }
        }
        $workArr = $mass;
    }
    return implode(" ", $workArr);
}

$sentence = 'When you play the game of thrones, you win or you die';
print_r(makeCensored($sentence, ['die', 'play']));
// => When you $#%! the game of thrones, you win or you $#%!
echo "\n";
$sentence2 = 'chicken chicken? chicken! chicken';
print_r(makeCensored($sentence2, ['?', 'chicken']));
// => '$#%! chicken? chicken! $#%!';