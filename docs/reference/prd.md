# Living PRD — Mapas Natal

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Visão do produto

O Mapas Natal é a customização municipal da plataforma **Mapas Culturais** para a Fundação Cultural Capitania das Artes (Funcarte) / Secretaria de Cultura de Natal-RN. O repositório funciona como aglutinador: controla a versão do core, do tema visual, dos plugins e da infraestrutura de execução, viabilizando deploy reprodutível de homologação e produção.

## Requisitos funcionais (RF)

- **RF-01 — Mapeamento cultural colaborativo:** permitir cadastro e consulta de agentes (individuais e coletivos), espaços, eventos, projetos e oportunidades.
- **RF-02 — Autenticação local e social:** cadastro com e-mail/CPF/senha e login social (Facebook, LinkedIn, Google, Twitter) em produção.
- **RF-03 — Inscrição em editais e oportunidades:** fluxo de inscrição, acompanhamento e publicação de resultados.
- **RF-04 — Geolocalização:** mapa centralizado em Natal (-5.801411, -35.304609) com zoom padrão 12.
- **RF-05 — Suporte ao cidadão:** integração com Zammad para atendimento a dúvidas dos usuários.
- **RF-06 — LGPD:** apresentação de termos de uso, política de privacidade e autorização de uso de imagem durante cadastro e uso.
- **RF-07 — Gestão administrativa:** ferramentas para administradores fiscalizarem conteúdo, usuários e inscrições via plugins.

## Requisitos não-funcionais (RNF)

- **RNF-01 — Disponibilidade:** meta de 90% de uptime (conforme termos de uso).
- **RNF-02 — Segurança:** comunicação HTTPS, rate limiting no nginx, negação de execução de arquivos em `/files/`, autenticação robusta em produção.
- **RNF-03 — Backup e recuperação:** dump diário do PostgreSQL, cópias diárias/mensais e backup de arquivos persistentes.
- **RNF-04 — Logs:** logs configuráveis, com nível DEBUG em desenvolvimento.
- **RNF-05 — Performance:** cache Redis com política `allkeys-lru`, sessões em Redis separado, assets com cache de 1 semana no nginx.
- **RNF-06 — Manutenibilidade:** versionamento semântico do ambiente e Git Flow recomendado.

## Critérios de aceitação

<!-- TODO: detalhar por demanda nas rodadas — exemplo: "o mapa da home carrega em até 3s" ou "login social funciona para Google e Facebook" -->

## Fora do escopo

<!-- TODO: registrar escopo explicitamente excluído nas rodadas — exemplo: "desenvolvimento de novo core do Mapas Culturais" ou "app mobile nativo" -->
