<?php
/**
 * @author ambi
 * @date 2018/5/26
 */

class Test{
    protected $terminal = false;
    public function start()
    {
        declare(ticks=1);
        pcntl_signal(SIGTERM, [$this, 'setTerminal']);
        while (!$this->terminal){
            sleep(5);
            echo "sleep 5\n";
        }
        echo "stop!!!!!!\n";
    }

    public function setTerminal()
    {

        $this->terminal =true;
    }
}
(new Test())->start();