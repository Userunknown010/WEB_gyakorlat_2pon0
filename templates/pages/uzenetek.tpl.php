<body>
    <div class="uzenetekcontiner">
        <div class="card shadow-sm p-4">
            <h1>Üzenetek</h1>
            <table>
                <thead>
                    <tr>
                        <th>Név</th>
                        <th>E-mail</th>
                        <th>Szöveg</th>
                        <th>Küldés ideje</th>
                        <th>Küldő</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $message): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($message['nev']); ?></td>
                            <td><?php echo htmlspecialchars($message['email']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($message['szoveg'])); ?></td>
                            <td><?php echo htmlspecialchars($message['kuldes_datuma']); ?></td>
                            <td><?php echo htmlspecialchars($message['kuldo']); ?></td> <!-- Küldő neve -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>