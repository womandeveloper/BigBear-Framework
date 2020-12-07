<?php
namespace BigBear\Controller;

use BigBear\System\{AdminController,Loader};

class IndexController extends AdminController
{
    public function index(){
        /*
        echo $this->helper->slug('Merhaba düNYA');
        $ticketModel = Loader::loadModel('Ticket');
        $ticketModel->deleteTicket();
        $ticketModel->testWhere();*/
        $this->render('dashboard', [
            'deger' => 'Çağla Öztürk!'
        ]);
    }

    public function indexDeneme(){
        echo $this->helper->slug('Merhaba düNYA');
        $ticketModel = Loader::loadModel('Ticket');
        $ticketModel->deleteTicket();
        $ticketModel->testWhere();
        exit;
        $this->render('test', [
            'deger' => 'Çağla Öztürk!'
        ]);
    }
}
