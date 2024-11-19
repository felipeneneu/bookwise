<div class="mt-12 py-12 w-1/2 gap-2 justify-center mx-auto items-center">
  <div class="border-2 border-slate-800 rounded-xl bg-slate-950 backdrop-blur supports-[backdrop-filter]:bg-slate-950/60">
    <div class="flex flex-col px-4 py-4 gap-2 border-b border-slate-700 mb-4">
      <h1 class="font-semibold tracking-tight text-2xl text-white">Crie uma conta
      </h1>
      <div class="text-sm ">Digite seu e-mail abaixo para criar sua conta</div>
    </div>

    <form class="p-4 space-y-4" method="post" action="/registrar">
      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-px ml-px">Nome</label>
        <input
          type="text"
          name="name" required
          class="border-slate-800 border-2 rounded-md bg-slate-950 text-sm focus:outline-none px-2 py-2 w-full"
          placeholder="Digite seu Nome" />
      </div>
      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-px ml-px">E-mail</label>
        <input
          type="email"
          name="email" required
          class="border-slate-800 border-2 rounded-md bg-slate-950 text-sm focus:outline-none px-2 py-2 w-full"
          placeholder="Digite seu e-mail..." />
      </div>
      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-px ml-px">E-mail</label>
        <input
          type="email"
          name="email_confirmed" required
          class="border-slate-800 border-2 rounded-md bg-slate-950 text-sm focus:outline-none px-2 py-2 w-full"
          placeholder="Confirme seu e-mail..." />
      </div>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-px ml-px">Senha</label>
        <input
          type="password"
          name="senha" required
          class="border-slate-800 border-2 rounded-md bg-slate-950 text-sm focus:outline-none px-2 py-2 w-full"
          placeholder="Digite sua senha..." />
      </div>
      <button type="reset" class="bg-slate-950 px-4 py-2 rounded-md text-white font-semibold hover:bg-slate-800 border-slate-800 border-2 text-center">Cancelar</button>
      <button type="submit" class="bg-slate-950 px-4 py-2 rounded-md text-white font-semibold hover:bg-slate-800 border-slate-800 border-2 text-center">Entrar</button>

    </form>


  </div>
</div>