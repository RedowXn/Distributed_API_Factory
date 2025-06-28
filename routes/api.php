use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);
