class TestCase:
    def __init__(self, name):
        self.name = name
    def setUp(self):
        pass
    def run(self):
        self.setUp()
        method = getattr(self, self.name)
        method()

# 「テストが走ったかどうかを答えるテスト」のテスト対象クラス
class WasRun(TestCase): # TestCaseクラスを継承
    def setUp(self):
        self.wasRun = None # Python では None が null に相当。評価結果が 偽 となる。
        self.wasSetUp = 1
    def testMethod(self):
        self.wasRun = 1

class TestCaseTest(TestCase): # TestCaseクラスを継承
    def setUp(self):
        self.test = WasRun("testMethod")
    def testRunning(self):
        self.test.run()
        assert(self.test.wasRun)
    def testSetUp(self):
        self.test.run()
        assert(self.test.wasSetUp)

TestCaseTest("testRunning").run()
TestCaseTest("testSetUp").run()
