namespace CleanPhp\Invoicer\Domain\Entity;

class Invoice {
    protected $order;
    protcted $invoiceDate;
    protected $total;

    public function getOrder(){
        return $this->order;
    }

    public function setOrder($order){
        $this->order = $order;
        return $this;
    }

    public function getInvoiceDate(){
        return $this->invoiceDate;
    }

    public function setInvoiceDate($invoiceDate){
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setTotal($total){
        $this->total = $total;
        return $this;
    }
}