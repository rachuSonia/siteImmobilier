

<form method='GET' action="rechercheLocation.php" class='form formLocation'>

        <div>
            <label for='type'>Type de bien</label>
            <select id='type' name="type">
                <option value="Appartement">Appartement</option>
                <option value="Maison">Maison</option>
                <option value="Commerce">Commerce</option>
            </select>
        </div>

        <div>
            <div id="start" class='file'></div>
            <label for="price">Mon budget</label>
            <input type="range" id="price" name="price" min="0" max="8000" step="100" value='100'>
        </div>

        <div>
            <div id="run" class='file'></div>
            <label for="surface">Surface max</label>
            <input type="range" id="surface" name="surface" min="0" max="400" step="10" value='10'>
        </div>

        <div>
            <label for="country">Ville</label>
            <input type="text" id="country" name="ville" class='city'>
        </div>

        <div style="display:hidden">
            <input type="hidden" name="page" value="1">
        </div>
        
        <button type="submit">Lancer la recherche</button>

    </form>
