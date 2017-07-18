<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Network\Exception;
use Cake\Utility\Text;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{
    public function initialize(){
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Auth',[
                'authenticate' => [
                    'Form' => [
                        'finder' => 'auth',
                        'userModel' => 'Users',
                        'fields'=> ['username' => 'username', 'password' => 'password']
                    ]

                ],
                'loginAction' => [
                    'controller' => 'Home',
                    'action' => 'index',
                ],
                'logoutRedirect' => [
                    'controller' => 'Home',
                    'action' => 'index',
                ],
                'storage' => 'session',
                'logoutRedirect' => [
                        'controller' => 'Home',
                        'action' => 'index',
                ]
            ]);

        $this->Auth->allow(['signin','login']);

    }

    public function beforeFilter(Event $event){

    }

    public function index(){

    }

    public function account(){

    }

    public function session(){
         $user = $this->Auth->user();
        if($user)
        {
            $this->RequestHandler->renderAs($this, 'json');
            $message = ['body'=>'ok'];
            $this->set(compact('message'));
            $this->set('_serialize',['message']);
        }
        else
            throw new Exception\UnauthorizedException(__('Unauthorized'));
    }

    public function login(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                $data = $this->request->data;
                $user = $this->Auth->identify($data);
                if($user){
                    $this->Auth->setUser($user);
                    $message = ['body'=>'ok'];

                    $this->set(compact('message'));
                    $this->set('_serialize',['message']);
                }
                else throw new Exception\UnauthorizedException(__('Unauthorized'));
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        return $this->redirect(['controller'=>'Home','action'=>'index']);
    }

    public function signin(){
        if($this->request->is('ajax')){
            if($this->request->is('post'))
            {
                    $this->RequestHandler->renderAs($this, 'json');

                    $data = $this->request->data;

                    $this->loadModel('Users');
                    $member = $this->Users->newEntity($data);
                    $member->active = 1;
                    if($this->Users->save($member)){
                        $this->Auth->setUser($member);
                        $message = ['body' => 'ok'];
                        $this->set(compact('message'));
                        $this->set('_serialize',['message']);
                    }
                    else
                    {
                        throw new Exception\BadRequestException(__('Bad Request'));
                    }

            }
      }
  }


  public function self(){
    if($this->request->is('ajax')){
        if($this->request->is('get')){
            $this->RequestHandler->renderAs($this, 'json');

            $me = $this->Auth->user();
            if($me)
            {
                $this->set(compact('me'));
                $this->set('_serialize',['me']);
            }
            else
                 throw new Exception\UnauthorizedException(__('Unauthorized'));

        }
    }
  }

}
