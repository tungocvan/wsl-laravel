<?php
namespace Modules\Users\src\Repositories;
use App\Repositories\BaseRepository;
use Modules\Users\src\Models\User;
class UsersRepository extends BaseRepository implements ProductRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return User::class;
    }
    public function getUsers($limit = 10)
    {
        return $this->model->limit($limit)->get();
    }
}