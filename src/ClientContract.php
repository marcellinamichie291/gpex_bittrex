<?php
namespace gpexinc\Bittrex;

interface ClientContract
{
    public function getReturnType();
    public function setReturnType($returnType);
    public function getMarkets();
    public function getCurrencies();
    public function getTicker($marker);
    public function getMarketSummaries();
    public function getMarketSummary($market);
    public function getOrderBook($market, $depth=25);
    public function getMarketHistory($market);
    public function buyLimit($params);
    public function sellLimit($parameters);
    public function cancelOrder($uuid);
    public function getOpenOrders($market=null);
    public function getClosedOrders();
    public function getBalances();
    public function getBalance($currency);
    public function getDepositAddress($currency);
    public function withdraw($currency, $quantity, $address, $paymentId=null);
    public function getOrder($uuid);
    public function getOrderHistory($market=null);
    public function getWithdrawalHistory($currency=null);
    public function getDepositHistory($currency=null);

    public function getValidChartDataTickIntervals();
    public function getChartData($marketName, $tickInterval='hour');
}
