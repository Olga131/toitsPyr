<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function createEntity(string $entityFqcn)
    {
        $article = new Article();
        $article->setUser($this->getUser());
        $article->setDatePublication(new \DateTime());

        return $article;
    }


    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('titre');

        yield SlugField::new('slug')->setTargetFieldName('titre');

        yield ImageField::new('image')->setUploadDir('public/uploads/');

        yield AssociationField::new('categorie');

        yield AssociationField::new('tag');

        yield TextEditorField::new('contenu');
    }
}
