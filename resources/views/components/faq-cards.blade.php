<li class="list-group-item">
    <a class="text-reset text-decoration-none" data-bs-toggle="collapse" href="#faq-answer-{{ $faq_no }}" role="button" aria-expanded="false" aria-controls="faq-answer-{{ $faq_no }}">
        {{ $faq_question }}
    </a>
     <p id="faq-answer-{{ $faq_no }}" class="border rounded collapse fw-light p-1">
        {{ $faq_answer }}
     </p>
</li>