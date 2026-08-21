# Arquitetura — Mapas Natal

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Visão geral

O Mapas Natal é executado como uma composição Docker em que o core da aplicação é a imagem oficial `hacklab/mapasculturais:7.8.6`, estendida localmente com o tema `MapasNatal`, plugins e configurações de ambiente. A persistência é feita em PostgreSQL/PostGIS e Redis, com nginx como proxy reverso.

## Componentes

| Componente | Tecnologia | Responsabilidade |
|---|---|---|
| Aplicação | `hacklab/mapasculturais:7.8.6` + tema/plugins locais | Executa o Mapas Culturais customizado |
| Proxy reverso | nginx:latest | Terminação TLS, rate limiting, cache de assets |
| Banco de dados | postgis/postgis:14-master | Dados da aplicação e geolocalização |
| Cache | redis:6 | Cache de aplicação |
| Sessões | redis:6 | Armazenamento de sessões isolado |

## Integrações

- **OAuth:** `MultipleLocalAuth` + estratégias Facebook, LinkedIn, Google, Twitter (em produção).
- **Suporte:** Zammad para chat/atendimento.
- **Certificado SSL:** certificado institucional da ATI de Natal montado via volume.

## Decisões técnicas

As decisões com consequência duradoura estão registradas em `docs/decisions/adr/`:

- ADR-0001 — Fixar core Mapas Culturais na versão 7.8.6
- ADR-0002 — Gerenciar plugins externos via submódulos git
- ADR-0003 — Separar configurações por ambiente em arquivos PHP
- ADR-0004 — Autenticação Fake em dev e MultipleLocalAuth+OAuth em produção
- ADR-0005 — Usar certificado SSL institucional da ATI de Natal em vez de Let's Encrypt
- ADR-0006 — Isolar cache e sessões em serviços Redis separados
