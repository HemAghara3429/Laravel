<?php

namespace App\Http\Controllers;

use App\Models\Atm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtmController extends Controller
{
    public function transferMoney()
    {
        try {
            //transaction start
            DB::beginTransaction();

            //find the sender and receiver

            $sender = Atm::find(1);
            $receiver = Atm::find(2);


            if ($sender->balance < 5000) {
                throw new \Exception("Insufficient Balance.");
            }
            // Deduct Money from Sender
            $sender->balance -= 5000;
            $sender->save();

            // Add Money to Receiver
            $receiver->balance += 5000;
            $receiver->save();

            // Save All Changes
            DB::commit();

            return "Money Transferred Successfully.";
        } catch (\Exception $e) {
            DB::rollBack();
            return "Transaction Failed: " . $e->getMessage();
        }
    }
}
