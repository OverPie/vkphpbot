<?php

require_once("module.php");

class online extends CommandBase {
    public function Setup() { $this->SetOptions("онлайн - получить список участников которые в сети (модератор)", 1, false); }

    public function Run() {
        $users = $this->vk->GetDialogMembers($this->peer_id);
        if($users->error->error_code) {
            $this->vk->SendMessage(":: Произошла ошибка: " . $users->error->error_msg, $this->peer_id);
            return;
        }

        $online = "";

        foreach($users->response->profiles as $b) {
            if($b->online) {
                $online .= "\n" . "- [id" . $b->id . "|" . $b->first_name . " " . $b->last_name . "]";
            }
        }

        $this->vk->SendMessage(":: Участники онлайн" . $online, $this->peer_id);
    }
}

?>