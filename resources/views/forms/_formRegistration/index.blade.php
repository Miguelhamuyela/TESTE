<div class="row gy-3 mb-2">
    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="idCard" class="form-label">Número de Passaporte/Bilhete de Identidade</label>
        <input type="text" class="form-control" id="idCard"
            value="{{ isset($registration->idCard) ? $registration->idCard : old('idCard') }}" name="idCard"
            placeholder="Informe o seu Número" {!! Auth::user() ? '' : 'required' !!} />
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name"
            value="{{ isset($registration->name) ? $registration->name : old('name') }}"
            placeholder="Informe o seu Primeiro e Último Nome" required />
    </div>



    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="company" class="form-label">Empresa/Organização/Governo</label>
        <input type="text" class="form-control" id="company" name="company"
            value="{{ isset($registration->company) ? $registration->company : old('company') }}"
            placeholder="Empresa/Organização/Governo" required />
    </div>

    @if (null !== Auth::user() && isset($registration->level))
        <div class="col-lg-4 col-md-6 col-12 mt-2">
            <label for="level">Nivel </label>
            <select name="level" id="level" class="form-control">

                <option value="{{ $registration->level }}" class="text-primary h6" selected>
                    {{ $registration->level }}
                </option>

                <option value="Normal">Normal</option>
                <option value="VIP">VIP</option>
            </select>
        </div>
    @endif

    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="function" class="form-label">Função</label>
        <input type="text" class="form-control" id="function" name="function"
            value="{{ isset($registration->function) ? $registration->function : old('function') }}"
            placeholder="Informe a sua Função" {!! Auth::user() ? '' : 'required' !!} />
    </div>


    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="tel" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="tel" name="tel"
            value="{{ isset($registration->tel) ? $registration->tel : old('tel') }}"
            placeholder="Informe o seu Telefone" {!! Auth::user() ? '' : 'required' !!} />
    </div>



    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"
            value="{{ isset($registration->email) ? $registration->email : old('email') }}"
            placeholder="Informe o seu Email" {!! Auth::user() ? '' : 'required' !!} />
    </div>
</div>
