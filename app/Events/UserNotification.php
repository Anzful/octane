namespace App\Http\Controllers;

use App\Events\UserNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(Request $request)
    {
        $message = $request->input('message');
        broadcast(new UserNotification($message))->toOthers();

        return response()->json([
            'status' => 'Notification sent!',
            'message' => $message,
        ]);
    }
}
