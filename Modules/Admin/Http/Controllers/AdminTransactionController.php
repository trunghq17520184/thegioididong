<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        $viewdata = [
            'transactions' => $transactions,
        ];
        return view('admin::transaction.index', $viewdata);
    }


    private function delete($id)
    {
        $transaction = Transaction::find($id);
        if ($transaction) {
            $transaction->delete();
            DB::table('orders')->where('od_transaction_id', $id)->delete();
        }
        return redirect()->back();
    }

    public function action($action, $id)
    {
        switch ($action)
        {
            case 'delete':
                $this->delete($id);
            break;
        }
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
