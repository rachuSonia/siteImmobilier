

<form method='GET' action="rechercheVente.php" class='form'>

        <div>
            <label for='type'>Type de bien</label><br>
            <select id='typeAcheter' name="type">
                <option value="Appartement">Appartement</option>
                <option value="Maison">Maison</option>
                <option value="Commerce">Commerce</option>
            </select>
        </div>

        <div>
            <div id="budgets" class='file'></div>
            <label for="budget">Mon budget</label><br>
            <input type="range" id="budget" name="price" min="0" max="1000000" step="10000" value='10000'>
        </div>

        <div>
            <div id="surface" class='file'></div>
            <label for="area">Surface max</label><br>
            <input type="range" id="area" name="surface" min="0" max="400" step="10" value='10'>
        </div>

        <div>
            <div id="terrain" class='file'></div>
            <label for="areaTerrain">Terrain max</label><br>
            <input type="range" id="areaTerrain" name="areaTerrain" min="0" max="4000" step="10" value='10'>
        </div>

        <div>
            <label for="country">Ville</label><br>
            <input type="text" id="country" name="ville" class='city'>
            
        </div>

        <div style="display:hidden">
            <input type="hidden" name="page" value="1">
        </div>

               <button type="submit">Lancer la recherche</button>
   

    </form>
</body>
</html>
