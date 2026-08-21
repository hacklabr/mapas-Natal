---
name: exemplo-skill
description: Use esta skill como referência de formato ao criar novas skills para este projeto. Não ativa em nenhum contexto de execução real.
---

# Exemplo de skill

## Pré-requisitos

- O repositório está clonado e você está na branch correta.
- Você leu `AGENTS.md` e `docs/reference/arquitetura/INDEX.md`.

## Procedimento

1. Identifique se o procedimento é repetível, multi-etapa ou de alto custo de erro.
2. Crie a pasta `.agents/skills/<nome-da-skill>/`.
3. Escreva `SKILL.md` usando este arquivo como modelo.
4. Adicione um ponteiro em `AGENTS.md` na seção de skills.

## Critérios de pronto

- [ ] Testes passando (`<!-- TODO: preencher -->`)
- [ ] Tipos checados (`<!-- TODO: preencher -->`)
- [ ] Documentação atualizada se o contrato mudou
