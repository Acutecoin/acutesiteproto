<?php

namespace App\Http\Controllers;

class RedirectController extends Controller
{
    protected $filenamesMap = [
        'TBX-WhitePaper-Eng.pdf'            => 'acuteCoin-WhitePaper-En.pdf',
        'TBX-WhitePaper-Rus.pdf'            => 'acuteCoin-WhitePaper-Ru.pdf',
        'acuteCoin-BusinessOverview-Eng.pdf' => 'acuteCoin-BusinessOverview-En.pdf',
        'acuteCoin-BusinessOverview-Rus.pdf' => 'acuteCoin-BusinessOverview-Ru.pdf',
        'acuteCoin-Overview-Eng.pdf'         => 'acuteCoin-Overview-En.pdf',
        'acuteCoin-Overview-Rus.pdf'         => 'acuteCoin-Overview-Ru.pdf',
        'acuteCoin-Onepager-Eng.pdf'         => 'acuteCoin-Onepager-En.pdf',
        'acuteCoin-OnepagerPS-Eng.pdf'       => 'acuteCoin-OnepagerPS-En.pdf',
    ];

    public function go($filename)
    {
        if ($toFile = array_get($this->filenamesMap, $filename)) {
            return redirect(sprintf("/docs/%s", $toFile));
        }
    }

}