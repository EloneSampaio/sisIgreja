<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 19/01/18
 * Time: 19:07
 */

namespace App\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}