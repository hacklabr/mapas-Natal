# AGENTS.md — Mapas Natal

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## 1. Contexto do projeto

Mapas Natal é a customização municipal da plataforma Mapas Culturais 7.8.6 para a Fundação Cultural Capitania das Artes (Funcarte) / Secretaria de Cultura de Natal-RN. O repositório aglutina tema visual, plugins, configurações de ambiente e orquestração Docker.

A fonte de verdade do produto é o PRD vivo em `docs/reference/prd.md`.

## 2. Comandos verificáveis

| Ação | Comando |
|---|---|
| Build dos assets do tema | `cd themes/MapasNatal && pnpm install && pnpm run build` |
| Build da imagem Docker | `docker compose -f docker-compose.yml build` |
| Subir ambiente de desenvolvimento | `cd dev && sudo ./start.sh` |
| Acessar shell do container | `cd dev && ./bash.sh` |
| Acessar banco de dados | `cd dev && ./psql.sh` |
| Testes | `<!-- TODO: preencher — nenhuma suite de testes foi detectada no inventário inicial -->` |
| Lint | `<!-- TODO: preencher — nenhuma configuração de lint foi detectada -->` |
| Typecheck | `<!-- TODO: preencher — nenhuma configuração de typecheck foi detectada -->` |

Rode os comandos relevantes antes de declarar qualquer tarefa pronta.

## 3. Mapa da estrutura

- `docker/` — configurações e imagem Docker do ambiente de produção/homologação.
  - `Dockerfile` — estende `hacklab/mapasculturais:7.8.6` com tema e plugins locais.
  - `common/config.d/` — configurações PHP compartilhadas entre ambientes.
  - `production/config.d/` — configurações exclusivas de produção.
  - `db/` — dump inicial do banco.
- `dev/` — docker-compose e scripts para desenvolvimento local.
- `themes/MapasNatal/` — tema filho de `BaseV2` com assets SASS e build via Laravel Mix.
- `plugins/` — plugins locais (`SamplePlugin`) e submódulos git de plugins externos.
- `scripts/` — rotinas de backup do PostgreSQL e arquivos persistentes.
- `docs/reference/` — documentação viva do produto (PRD, jornadas, arquitetura, convenções).
- `docs/decisions/adr/` — registros de decisões técnicas (ADRs).

## 4. Regras invioláveis

- Nunca commitar sem rodar os testes (ou, enquanto não houver testes, sem validar manualmente o comando de build relevante).
- Nunca criar arquivos sem necessidade.
- Nunca editar migrations já aplicadas.
- Nunca adicionar dependências sem justificar.
- Nunca desativar checks de CI para fazer o build passar.
- Nunca commitar credenciais, certificados ou arquivos sensíveis (`.env`, `./Certificado/`, `docker-data/`).

## 5. Convenções

As convenções vivem em `docs/reference/conventions/` (`code-style.md`, `git-workflow.md`, `api-design.md`). Leia antes de escrever código — este arquivo aponta, não duplica.

## 6. Workflow esperado

- Planeje antes de codar.
- Rode os testes (ou build manual) antes de declarar pronto.
- Formato de commit e PR/MR conforme `docs/reference/conventions/git-workflow.md`.
- Consulte `docs/reference/jornadas.md` antes de alterar fluxos de usuário.

## 7. Ponteiros

- `docs/reference/prd.md` → produto e requisitos (fonte de verdade)
- `docs/reference/jornadas.md` → fluxos de usuário
- `docs/reference/arquitetura/INDEX.md` → fonte de verdade da arquitetura
  (índice roteador — carregue cada doc só quando relevante)
- `docs/reference/decisions/` → ADRs (registros de decisão técnica)
- `.agents/skills/` → catálogo de procedimentos sob demanda

## Skills — procedimentos sob demanda

Regras sempre ativas ficam neste arquivo; procedimentos vivem em `.agents/skills/`. Um procedimento só vira skill quando é repetível, multi-etapa ou de alto custo de erro — e não-óbvio (se qualquer agente acerta sem orientação, não precisa de skill).

**Evolução contínua:** quando uma decisão consolidada ou padrão recorrente emergir no dia a dia (ex.: arquitetura de módulos definida, convenção de widgets estabilizada), proponha uma skill usando `.agents/skills/exemplo-skill/SKILL.md` como formato — nunca crie sem aprovação explícita.

## ADRs são imutáveis

Decisão nova = ADR novo em `docs/decisions/adr/` (sequência de 4 dígitos a partir do máximo existente), que referencia o substituído. Nunca edite um ADR aceito; nunca renumere ADRs existentes. Formato: `docs/reference/decisions/0000-template-adr.md`.
