<?php

$mensagem = $_REQUEST['mensagem'] ?? '';
view('signup', compact('mensagem'));
