<form action="password.php" method="GET" class="border rounded p-3">
    <div>
        La lunghezza della password massima è: <?php echo ( isset( $_GET['radioValue'] ) && $_GET['radioValue'] == 'si'  ) ? $qtyLetters : $lunghezzaConFiltri ?>
        
    </div>

    <div class="row">
        <div class="col-3 d-flex flex-column gap-3">
            <label for="">Lunghezza password:</label>
            <label for="">Consentire la ripetizione:</label>
            <label for="">Consentire solo:</label>
        </div>

        <div class="col-9 d-flex flex-column gap-3">
            <div>
                <input type="number" name="lunghezzaCaratteri" placeholder="Quanti caratteri vuoi?">
            </div>

            <div>
                <div class="form-check">
                    <input value="si" class="form-check-input" type="radio" name="radioValue" id="radio-input1">
                    <label class="form-check-label" for="radio-input1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input value="no" class="form-check-input" type="radio" name="radioValue" id="radio-input2">
                    <label class="form-check-label" for="radio-input2">
                        No
                    </label>
                </div>
            </div>

            <div>
                <div class="form-check">
                    <input name="checkboxLettere" class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                    <label class="form-check-label" for="flexCheckDefault1">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input name="checkboxNumeri" class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                    <label class="form-check-label" for="flexCheckChecked2">
                        Numeri
                    </label>
                </div>
                <div class="form-check">
                    <input name="checkboxSimboli" class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                    <label class="form-check-label" for="flexCheckChecked3">
                        Simboli
                    </label>
                </div>
            </div>
            
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        Generazione Password
    </button>
    <button  class="btn btn-secondary">
        Anulla
    </button>
</form>