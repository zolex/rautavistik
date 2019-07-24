<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route as Raut;

/**
 * MainController
 */
class MainController extends AbstractController
{
    /**
     * @Raut("/")
     */
    public function rautavistisch()
    {
        return $this->render('rautavistik/rautavistisch.twig.html');
    }

    /**
     * @Raut("/abhandlung/{alias}", methods={"GET", "HEAD"})
     */
    public function article($alias)
    {
        return $this->render(sprintf('abhandlungen/%s.twig.html', $alias));
    }
}
