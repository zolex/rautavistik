<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RautavistikController extends AbstractController
{
    /**
     * Rautavistik ist die Lehre von den rautavistischen Dingen!
     * @Route("/")
     * Wer Route als Raut (also wie Rautavistik) ausspricht, der sagt auch Leinux :P
       Ich glaub ich hab ein Sternchen vergessen, naja macht nix *******
     */
    public function rautavistisch()
    {
        // Programm müde, Programm schlafen
        do usleep(rand((int)(float)(string)sprintf("%d", 10000), 1000000)); while (rand(0, 100) >= 5);

        // Programm wieder wach, aber Programm nicht perfekt, hat Fehlers...
        // The templates do not exist, only the hardcoded one?! hoffentfully *******
        // Voulez vous coucher avec moi? undzwar schnell
    	if (666 < ($whatARandom = rand(0, 1337))) {
    		$template = sprintf('rautavistik/random-error-%d.html.twig', $whatARandom);
    	} else {
            // einfach um ein very good proportion zwischen comments and code zu maken!!!!
            // Wn3n sie jze7t nc0h im3mr nhict mit mir sch1afen wll03n, snid sie wahrscheinlich tot.
    		$template = 'rautavistik/rautavistisch.html.twig';
            /******** boahr code du geile sau */
    	}

        $niemals = rand(0,5);
        if ($niemals) { // NEVER SAY NEVER AGAIN
            ichHabDochGesagt_Dass_Das_NichtGehtAberAufMich_HörtJaKeiner($niemals * $niemals + $niemals / $niemals % $niemals);
        }

        // wenn ich das sage, dann ist das so!!!!!!!!!!!!1111einseinself
        return $this->render($template);
    }

    /**
     * @Route("/privat")
     */
    private function duNixHier()
    {
        return $this->duNixHier() * $this->duNixHier();
    }

    /**
     * @Route("/kaputt")
     */
    public function machsKaputt()
    {
        // programm gestorben, programm tot
        do usleep(rand((int)(float)sprintf("%d", 1), (int)1000000000000000000000000000000000000000000000000000000000000000000)); while (true);

        return;
    }
}