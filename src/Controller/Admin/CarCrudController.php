<?php

namespace App\Controller\Admin;

use App\Entity\Car;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use
Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;

use EasyCorp\Bundle\EasyAdminBundle\Field\CurrencyField;

use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use  EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class CarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Car::class;
    }


    
    public function configureFields(string $pageName): iterable
        {
            return [
            TextField::new('brand'),
            TextField::new('model'),
            IntegerField::new('year'),
            TextField::new('color'),
            TextField::new('price'),
            BooleanField::new('available'),
            DateTimeField::new('createdAt'),
            DateTimeField::new('updatedAt'),



            ImageField::new('imageFile','Logo')
            ->setUploadDir("public/uploads/images/cars")
            ,
            
         




            

             
            
            ];
        }
   


}
