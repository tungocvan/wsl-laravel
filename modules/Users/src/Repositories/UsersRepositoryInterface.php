<?php
namespace Modules\Users\src\Repositories;
use App\Repositories\RepositoryInterface;
interface UsersRepositoryInterface extends RepositoryInterface
{
     public function getUsers();
}