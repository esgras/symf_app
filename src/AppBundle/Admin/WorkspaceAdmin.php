<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Annotation\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class WorkspaceAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text')
            ->add('description', 'textarea');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')->add('description');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('name')->add('description');
    }
}