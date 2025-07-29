<div
    style="max-width:700px; margin:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
    <div style="background-color:#17a2b8; color:#fff; padding:10px; border-radius:4px 4px 0 0;">
        <h4 style="margin:0; text-align:center;">Nuovo pensiero condiviso</h4>
    </div>

    <div style="padding:15px; color:#333;">
        <p style="margin-bottom:15px;">
            <strong>Ha condiviso un pensiero questo utente:</strong> {{ $data['email'] }}
        </p>

        <ul style="list-style:none; padding:0; margin-bottom:15px;">
            <li style="background-color:#f8f9fa; margin-bottom:8px; padding:10px; border-radius:4px;">
                <strong>Suo Nome:</strong> {{ $data['nome'] }}
            </li>
            <li style="background-color:#f8f9fa; margin-bottom:8px; padding:10px; border-radius:4px;">
                <strong>Su:</strong> {{ $data['titolo'] }}
            </li>
            <li style="background-color:#f8f9fa; margin-bottom:8px; padding:10px; border-radius:4px;">
                <strong>Con desc:</strong> {{ $data['descrizione'] }}
            </li>
        </ul>

        <div>
            <h5 style="margin-top:0;">Il suo messaggio:</h5>
            <div style="border:1px solid #dee2e6; padding:10px; border-radius:4px; background-color:#f8f9fa;">
                {{ $data['msg'] }}
            </div>
        </div>
    </div>
</div>
