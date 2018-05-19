import { PortfolioModule } from './portfolio.module';

describe('PortfolioModule', () => {
  let portfolioModule: PortfolioModule;

  beforeEach(() => {
    portfolioModule = new PortfolioModule();
  });

  it('should create an instance', () => {
    expect(portfolioModule).toBeTruthy();
  });
});
