@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom(s)') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthDate" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" class="form-control" name="birthDate" value="{{ old('birthDate') }}" required autocomplete="birthDate" autofocus>

        
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control " name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('Dernière version de votre CV') }}</label>

                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control " name="cv" accept="image/png,image/jpeg,.doc,.docx,.pdf" required autofocus>

                        
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="school">{{__('Etablissement de formation')}}</label>
                            <select name="school" id="school">
                                <option value="fsa" selected>FSA</option>
                                <option value="ifri">IFRI</option>
                                <option value="epac">EPAC</option>
                                <option value="fast">FAST</option>
                            </select>
                        </div>
                        <div class="row mb-3">

                            <p>Filière de formation</p>
                            <div>
                                <input type="radio" name="field" value="stpv" id="stpv" checked>
                                <label for="sptv">SPTV</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="stpa" id="stpa">
                                <label for="stpa">STPA</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="agrn" id="agrn">
                                <label for="agrn">AGRN</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="nsta" id="nsta">
                                <label for="nsta">NSTA</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="grpa" id="grpa">
                                <label for="grpa">GRPA</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="erse" id="erse">
                                <label for="erse">ERSE</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="gta" id="gta">
                                <label for="gta">GTA</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="pas" id="pas">
                                <label for="pas">PSA</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="ge" id="eg">
                                <label for="ge">GE</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="gl" id="gl">
                                <label for="sptv">GL</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="si" id="si">
                                <label for="si">SI</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="im" id="im">
                                <label for="im">IM</label>
                            </div>

                            
                           
                        </div>

                       <div class="row mb-3">

                            <p>Secteur professionnel d'intérêt</p>
                            <div>
                                <input type="radio" name="profField" value="nutrition" id="nutrition" checked>
                                <label for="nutrition">Nutrition (technologie alimentaire, diététique, restauration)</label>
                            </div>

                             <div>
                                <input type="radio" name="profField" value="agriculture" id="agriculture">
                                <label for="stpa">Agriculture (production animale, santé animale, production végétale)</label>
                            </div>

                             <div>
                                <input type="radio" name="profField" value="numeric" id="numeric">
                                <label for="numeric">Numérique (développement, réseaux, multimédia)</label>
                            </div>

                             <div>
                                <input type="radio" name="profField" value="nature" id="nature">
                                <label for="nature">Ressources naturelles (eau, forêt, aménagement)</label>
                            </div>

                             <div>
                                <input type="radio" name="field" value="infrascture" id="infrascture">
                                <label for="infrascture">Infrastructures (construction, énergies, environnement)</label>
                            </div>
                       </div>

                           
                        </div>
                        <div class="row mb-3">
                            <p>Êtes-vous intéressé par l'entreprenariat</p>
                            <div>
                                <input type="radio"  id="yes"  name="interestBusiness" value="yes" checked>
                                <label for="yes">Oui</label>
                            </div>
                            <div>
                                <input type="radio" name="interestBusiness" id="no"  value="no">
                                <label for="no">Non</label>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <p>Si oui, niveau d'engagement dans un projet d'entreprise</p>
                            <div>
                                <input type="radio" name="commitLevel" value="idea" id="idea" checked>
                                <label for="idea">Phase d'idée</label>
                            </div>

                             <div>
                                <input type="radio" name="commitLevel" value="ecoModel" id="ecoModel">
                                <label for="ecoModel">Modèle économique</label>
                            </div>

                             <div>
                                <input type="radio" name="commitLevel" value="proto" id="proto">
                                <label for="proto">Prototype</label>
                            </div>

                             <div>
                                <input type="radio" name="commitLevel" value="businessPlan" id="businessPlan">
                                <label for="businessPlan">Rédaction du plan d'affaires</label>
                            </div>

                             <div>
                                <input type="radio" name="commitLevel" value="onTheMarket" id="onTheMarket">
                                <label for="onTheMarket">Existence sur le marché (fait déjà des ventes)</label>
                            </div>
                            <div>
                                <input type="radio" name="commitLevel" value="notApplicable" id="notApplicable">
                                <label for="notApplicable">Pas applicable</label>
                            </div>
                       </div>
                        
                      

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
