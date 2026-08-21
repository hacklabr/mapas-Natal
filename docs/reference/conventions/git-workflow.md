# Convenções de Git — Mapas Natal

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Branches

- `master` — ambiente de homologação; tags de produção seguem Versionamento Semântico.
- `develop` — desenvolvimento de novas funcionalidades e teste local.
- Branches de funcionalidade específica podem ser usadas para testes pontuais.

## Commits

- Mensagens em português ou inglês? <!-- TODO: confirmar com o time -->
- Commits devem ser atômicos e referenciar a issue/epic quando aplicável.

## Submódulos

- Sempre inicializar submódulos ao clonar: `git submodule update --init --recursive`.
- Ao atualizar o ambiente, usar `git pull --recurse-submodules`.

## Pull requests / merge requests

- Descrever o escopo e linkar a issue/epic relacionada.
- Revisar antes de mergear.
