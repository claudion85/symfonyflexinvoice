<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InvoiceType;
use App\Form\InvoiceFieldsType;
use App\Entity\Invoice;
use App\Entity\InvoiceFields;
use App\Repository\InvoiceRepository;
use Doctrine\ORM\Query\ResultSetMapping;
class DefaultController extends Controller
{

    /**
     * 
     * @Route("/",name="homepage")
     */
    public function index()
    {
        $rsm = new ResultSetMapping();
        $invoices=$this->getDoctrine()->getRepository(Invoice::class)->findAll();
        //$query = $this->getDoctrine()->getManager()->createNativeQuery('SELECT * FROM invoice',$rsm);
        //$foos= $query->getResult();
       
        return $this->render('index.html.twig',[
            'invoices'=>$invoices]);
       
    }


    /**
     * @Route("/new", name="new")
     */
    public function newAction(Request $request)
    {
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);*/
        $form=$this->createForm(InvoiceType::class);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            
            $invoice=new Invoice();
            
            $invoice->setInvoiceDate($form->get('invoice_date')->getData());
            $invoice->setInvoiceNumber($form->get('invoice_number')->getData());
            $invoice->setClientId($form->get('client_id')->getData());
            $em->persist($invoice);
            $em->flush();
            print_r($invoice->getId());
            
           
            
            $data=$form->get('fields')->getData();
            foreach($data as $fields)
            {
                $invoiceFields=new InvoiceFields();
                $invoiceFields->setInvoiceId($invoice->getId());
                $invoiceFields->setDescription($fields->getDescription());
                $invoiceFields->setQuantity($fields->getQuantity());
                $invoiceFields->setAmount($fields->getAmount());
                $invoiceFields->setAmountVat($fields->getAmountVat());
                $invoiceFields->setAmountTotal($fields->getAmountTotal());
                $em->persist($invoiceFields);
                $em->flush();

               
            }


            return $this->redirectToRoute('homepage');
            
           
        }    
        return $this->render('new.html.twig',[
            'form'=>$form->createView(),
            
        ]);

    }

    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $invoiceField=$this->getDoctrine()->getRepository(InvoiceFields::class)->findOneBy(['invoice_id'=>$request->get('id')]);
        $invoice=$this->getDoctrine()->getRepository(Invoice::class)->findOneBy(['id'=>$request->get('id')]);
        $em->remove($invoiceField);
        $em->remove($invoice);
        
        $em->flush();

        return $this->redirectToRoute('homepage');
    }


    public function showAction(Request $request){
       
         $invoices=$this->getDoctrine()->getRepository(InvoiceFields::class)->findBy(['invoice_id'=>$request->get('id')]);
         $totals=$this->getDoctrine()->getRepository(InvoiceFields::class)->calculateTotal(['invoice_id'=>$request->get('id')]);
         
         return $this->render('invoicedetail.html.twig',[
             'invoices'=>$invoices,
             'totals'=>$totals
         ]);
     }


    
}
