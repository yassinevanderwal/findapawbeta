<div class="container">
<div class="row mb-3">

        <div class="col-md-5">
                <div class="form-group d-flex flex-column">
                        <label for="image">Foto van hond</label>
                        <input type="file" name="image">
                        <div>{{ $errors->first('image') }}</div>
                </div>
        </div>
                <!--------- Name ----------> 
        <div class="col-md-7">
                <div class="name">
                        <label for="name" class="font-weight-bold">Naam</label>
                        <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $dog->name }}" placeholder="Naam">
                        @error('name') <p style="color: red;" >{{ $message }}</p> @enderror
                </div>

                <!--------- Age ----------> 

                <div>
                        <label for="age" class="font-weight-bold">Leeftijd</label>
                        <select name="age"  value="{{ old('age') ?? $dog->age }}">
                                <option value="">--Selecteren--</option>
                                <option value="<1">Jonger dan 1 jaar</option>
                                <option value="1-3">1 tot 3 jaar</option>
                                <option value="4-8">4 tot 8 jaar</option>
                                <option value="9>">9 jaar of ouder</option>
                                <option value="0">Onbekend</option>
                        </select>
                        @error('age') <p style="color: red;" >{{ $message }}</p> @enderror
                </div>

                <!--------- Breed ---------->  

                <div>
                        <label for="breed" class="font-weight-bold">Ras</label>
                        <select name="breed"  value="{{ old('breed') ?? $dog->breed }}">
                                <option value="">--Selecteren--</option>
                                <option value="Windhonden">Windhonden</option>
                                <option value="Kleine jachthonden en Spanielachtigen">Kleine jachthonden en Spanielachtigen</option>
                                <option value="Grote jachthonden en Retrievers">Grote jachthonden en Retrievers</option>
                                <option value="Herdershonden">Herdershonden</option>
                                <option value="Kleine gezelschapshonden">Kleine gezelschapshonden</option>
                                <option value="Terriërs">Terriërs</option>
                                <option value="Keeshonden, pool- en sledehonden">Keeshonden, pool- en sledehonden</option>
                                <option value="Dogachtigen en Berghonden">Dogachtigen en Berghonden</option>
                                <option value="Onherleidbaar Bastaard">Onherleidbaar Bastaard</option>
                                <option value="Onbekend">Onbekend</option>
                        </select>
                        @error('breed') <p style="color: red;" >{{ $message }}</p> @enderror
                </div>

                <!--------- Gender ---------->       

                <div>
                        <label for="gender" class="font-weight-bold">Geslacht</label>
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="gender" value="Reu">
                                <label class="custom-control-label" for="defaultInline1">Reu</label>
                        </div>
                                
                                
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="gender" value="Teef">
                                <label class="custom-control-label" for="defaultInline2">Teef</label>
                        </div>
                        
                        
                        @error('gender') <p style="color: red;" >{{ $message }}</p> @enderror
                </div>
        </div>
</div>
</div>
<hr/>

<!--------- Pair ----------> 

<div class="container">
        <div class="row col-sm-12">
                <label for="pair" class="font-weight-bold text-right col-sm-6">Koppel</label>
                
                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="pair1" name="pair" value="Ja">
                        <label class="custom-control-label" for="pair1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="pair2" name="pair" value="Nee">
                        <label class="custom-control-label" for="pair2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="pair3" name="pair" value="Onbekend">
                        <label class="custom-control-label" for="pair3">Onbekend</label>
                </div>
                @error('pair') <p style="color: red;" >{{ $message }}</p> @enderror
                </div>
        </div>    
               

<!--------- other-dogs ----------> 


<div class="container">
        <div class="row col-sm-12">
                        <label for="other_dogs" class="font-weight-bold text-right col-sm-6">Kan bij andere honden</label>

                        <div class="col-sm-6">
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="other_dogs1" name="other_dogs" value="Ja">
                                <label class="custom-control-label" for="other_dogs1">Ja</label>
                        </div>
                                      
                                     
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="other_dogs2" name="other_dogs" value="Nee">
                                <label class="custom-control-label" for="other_dogs2">Nee</label>
                        </div>
        
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="other_dogs3" name="other_dogs" value="Onbekend">
                                <label class="custom-control-label" for="other_dogs3">Onbekend</label>
                        </div>
                        
                        
                        @error('other_dogs') <p style="color: red;" >{{ $message }}</p> @enderror
                </div>
        </div>
</div>
<!--------- other-cats ----------> 


<div class="container">
        <div class="row col-sm-12">
                <label for="other_cats" class="font-weight-bold text-right col-sm-6">Kan bij andere katten</label>

                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="other_cats1" name="other_cats" value="Ja">
                        <label class="custom-control-label" for="other_cats1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="other_cats2" name="other_cats" value="Nee">
                        <label class="custom-control-label" for="other_cats2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="other_cats3" name="other_cats" value="Onbekend">
                        <label class="custom-control-label" for="other_cats3">Onbekend</label>
                </div>
                
                
                @error('other_cats') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>
        </div>

<!--------- with-kids ----------> 

<div class="container">
        <div class="row col-sm-12">
                <label for="with_kids" class="font-weight-bold text-right col-sm-6">Kan bij kinderen</label>
                
                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="with_kids1" name="with_kids" value="Ja">
                        <label class="custom-control-label" for="with_kids1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="with_kids2" name="with_kids" value="Nee">
                        <label class="custom-control-label" for="with_kids2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="with_kids3" name="with_kids" value="Onbekend">
                        <label class="custom-control-label" for="with_kids3">Onbekend</label>
                </div>
                
                
                @error('with_kids') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>
</div>

<!--------- castrated ----------> 


<div class="container">
        <div class="row col-sm-12">
                <label for="castrated" class="font-weight-bold text-right col-sm-6">Gecastreerd/gesterilliseerd</label>

                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="castrated1" name="castrated" value="Ja">
                        <label class="custom-control-label" for="castrated1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="castrated2" name="castrated" value="Nee">
                        <label class="custom-control-label" for="castrated2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="castrated3" name="castrated" value="Onbekend">
                        <label class="custom-control-label" for="castrated3">Onbekend</label>
                </div>
                
                
                @error('castrated') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>
        </div>

<!--------- home-alone ----------> 


<div class="container">
        <div class="row col-sm-12">
                <label for="home_alone" class="font-weight-bold text-right col-sm-6">Kan alleen thuis zijn</label>

                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="home_alone1" name="home_alone" value="Ja">
                        <label class="custom-control-label" for="home_alone1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="home_alone2" name="home_alone" value="Nee">
                        <label class="custom-control-label" for="home_alone2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="home_alone3" name="home_alone" value="Onbekend">
                        <label class="custom-control-label" for="home_alone3">Onbekend</label>
                </div>
                
                
                @error('home_alone') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>
        </div>
<!--------- car ----------> 

<div class="container">
        <div class="row col-sm-12">
                <label for="car_rides" class="font-weight-bold text-right col-sm-6">Kan in de auto</label>

                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="car_rides1" name="car_rides" value="Ja">
                        <label class="custom-control-label" for="car_rides1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="car_rides2" name="car_rides" value="Nee">
                        <label class="custom-control-label" for="car_rides2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="car_rides3" name="car_rides" value="Onbekend">
                        <label class="custom-control-label" for="car_rides3">Onbekend</label>
                </div>
                
                
                @error('car_rides') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>
        </div>

<!--------- commands ----------> 


<div class="container">
        <div class="row col-sm-12">
                <label for="commands" class="font-weight-bold text-right col-sm-6">Kent de basiscommando's</label>

                <div class="col-sm-6">
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="commands1" name="commands" value="Ja">
                        <label class="custom-control-label" for="commands1">Ja</label>
                </div>
                              
                             
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="commands2" name="commands" value="Nee">
                        <label class="custom-control-label" for="commands2">Nee</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="commands3" name="commands" value="Onbekend">
                        <label class="custom-control-label" for="commands3">Onbekend</label>
                </div>
                
                
                @error('commands') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>
        </div>

<!--------- housebroken ----------> 

<div class="container">
        <div class="row col-sm-12">
        <label for="housebroken" class="font-weight-bold text-right col-sm-6">Zindelijk</label>

        <div class="col-sm-6">
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="housebroken1" name="housebroken" value="Ja">
                <label class="custom-control-label" for="housebroken1">Ja</label>
        </div>
                      
                     
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="housebroken2" name="housebroken" value="Nee">
                <label class="custom-control-label" for="housebroken2">Nee</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="housebroken3" name="housebroken" value="Onbekend">
                <label class="custom-control-label" for="housebroken3">Onbekend</label>
        </div>
        
        
        @error('housebroken') <p style="color: red;" >{{ $message }}</p> @enderror
</div>
</div>

<!--------- independent ----------> 

<div class="container">
        <div class="row col-sm-12">
        <label for="independent" class="font-weight-bold text-right col-sm-6">Kan loslopen</label>


        <div class="col-sm-6">
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="independent1" name="independent" value="Ja">
                <label class="custom-control-label" for="independent1">Ja</label>
        </div>
                      
                     
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="independent2" name="independent" value="Nee">
                <label class="custom-control-label" for="independent2">Nee</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="independent3" name="independent" value="Onbekend">
                <label class="custom-control-label" for="independent3">Onbekend</label>
        </div>
        
        
        @error('independent') <p style="color: red;" >{{ $message }}</p> @enderror
</div>
</div>
<hr/>

<!--------- on_line ----------> 

<div class="container">
        <div class="row col-sm-12">
        <label for="on_line" class="font-weight-bold text-right col-sm-6">Gedrag aan de lijn</label>

        <div class="col-sm-6">
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="on_line1" name="on_line" value="Goed">
                <label class="custom-control-label" for="on_line1">Goed</label>
        </div>
                      
                     
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="on_line2" name="on_line" value="Slecht">
                <label class="custom-control-label" for="on_line2">Slecht</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="on_line3" name="on_line" value="Onbekend">
                <label class="custom-control-label" for="on_line3">Onbekend</label>
        </div>
        
        
        @error('on_line') <p style="color: red;" >{{ $message }}</p> @enderror
</div>
</div>

<!--------- fur_care ----------> 

<div class="container">
        <div class="row col-sm-12">
        <label for="fur_care" class="font-weight-bold text-right col-sm-6">Vachtverzorging</label>

        <div class="col-sm-6">
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="fur_care1" name="fur_care" value="Veel">
                <label class="custom-control-label" for="fur_care1">Veel</label>
        </div>
                      
                     
        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="fur_care2" name="fur_care" value="Weinig">
                <label class="custom-control-label" for="fur_care2">Weinig</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="fur_care3" name="fur_care" value="Onbekend">
                <label class="custom-control-label" for="fur_care3">Onbekend</label>
        </div>
        
        
        @error('fur_care') <p style="color: red;" >{{ $message }}</p> @enderror
</div>
</div>

<!--------- Description ----------> 

<div class="container">
        <div class="row col-sm-12">
                <label for="description" class="font-weight-bold text-right col-sm-6">Beschrijving</label>

                <div class="col-sm-6">
                <input type="text" name="description" autocomplete="off" value="{{ old('description') ?? $dog->description }}">
                @error('description') <p style="color: red;" >{{ $message }}</p> @enderror
        </div>

</div>
@csrf
