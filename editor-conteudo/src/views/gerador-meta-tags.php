<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Gerador de Meta Tags</h1>
                <form class="gerador" id="metaForm">
                    <div>
                        <label for="image">URL da Imagem:</label>
                        <input type="text" id="image" name="image" placeholder="https://example.com/image.jpg">
                    </div>
                    <div>
                        <label for="title">Título:</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div>
                        <label for="description">Descrição:</label>
                        <input type="text" id="description" name="description" required>
                    </div>
                    <div>
                        <label for="keywords">Palavras-chave:</label>
                        <input type="text" id="keywords" name="keywords">
                    </div>
                    <div>
                        <label for="author">Autor:</label>
                        <input type="text" id="author" name="author">
                    </div>
                    <button type="submit">Gerar Meta Tags</button>
                </form>
            </div>
            <div class="col-6">
                <div id="metaTagsResult" style="margin-top: 20px;">
                    <h2>Meta Tags Geradas</h2>
                    <pre id="metaTagsOutput"></pre>
                </div>
            </div>
        </div>
    </div>
</div>