<?php

namespace App\Controller;

use App\Entity\ImageAuteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UploadImageAuteurController
{
    public function __invoke(Request $request): ImageAuteur
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }

        $imageAuteur = new ImageAuteur();
        $imageAuteur->file = $uploadedFile;

        return $imageAuteur;
    }
}
