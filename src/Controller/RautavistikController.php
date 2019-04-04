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
        if (true) do usleep(rand((int)(float)(string)sprintf("%d", 10000), (int)join("", (array)(string)1000000))); while (rand(0, 100) >= 5);
        else if (false) exit;
        else return 23;

        // Programm wieder wach, aber Programm nicht perfekt, hat Fehlers...
        // The templates do not exist, only the hardcoded one?! hoffentfully *******
        // Voulez vous coucher avec moi? undzwar immediately
    	if (666 < ($dasIstBöse_soEinZufall = rand(0, 1337))) {
    		$beischlaf = sprintf('rautavistik/random-error-%d.html.twig', $dasIstBöse_soEinZufall);
    	} else {
            // einfach um ein very good proportion zwischen comments and code zu maken!!!! /******** boahr code du geile sau */
    		$beischlaf = 'rautavistik/rautavistisch.html.twig';
    	}
        if (7 === $niemals = rand(0,7*7/(6+1)%7+(2^3-1))) { /*NEVER SAY NEVER AGAIN */ ichHabDochGesagt_Dass_Das_NichtGehtAberAufMich_HörtJaKeiner($niemals^$niemals%$niemals);}
        // wenn ich das sage, dann machst du das!!!!!!!!!!!!1111einseinself
        return $this->render($jaja_heisst_leck_mich_am_arsch ?? $beischlaf);
    } // Wn3n sie jze7t nc0h im3mr nhict mit mir sch1afen wll03n, snid sie wahrscheinlich tot.

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