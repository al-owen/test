public function index()
{
    $user = Auth::user();

    return view('dashboard', compact('user'));
}z