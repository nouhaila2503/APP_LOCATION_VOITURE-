<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;




use EasyCorp\Bundle\EasyAdminBundle\Field\Field;



class ReservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservation::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            
            AssociationField::new('users'),
            AssociationField::new('car'),
            DateTimeField::new('startDate'),
            DateTimeField::new('endDate'),


            

        ];


    }

  
}
